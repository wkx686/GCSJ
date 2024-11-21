const tableBody = document.querySelector('#bookTable tbody');

fetch('../php/kucun.php')
   .then(response => response.json())
   .then(data => {
        books = data;
        displayBooks();
    });

function displayBooks() {
    tableBody.innerHTML = '';
    books.forEach(book => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${book.name}</td>
            <td>${book.author}</td>
            <td>${book.publisher}</td>
            <td>${book.rating}</td>
            <td>${book.quantity}</td>
            <td>
                <button onclick="borrowBook(${books.indexOf(book)})">借阅</button>
                <button onclick="returnBook(${books.indexOf(book)})">还书</button>
            </td>
        `;
        tableBody.appendChild(row);
    });
}

function borrowBook(index) {
    fetch('../php/kucun.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `borrow=true&bookId=${books[index].id}`
    })
       .then(response => response.json())
       .then(data => {
            books[index] = data;
            displayBooks();
        })
        window.location.href = 'http://127.0.0.1/html/borrow.html';
}

function returnBook(index) {
    fetch('./php/backend.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `return=true&bookId=${books[index].id}`
    })
       .then(response => response.json())
       .then(data => {
            books[index] = data;
            displayBooks();
        })
        window.location.href = 'http://127.0.0.1/html/return.html';
}