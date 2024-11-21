fetch('../php/guancang.php')
  .then(response => response.json())
  .then(data => {
        document.getElementById('totalBooks').textContent = `书籍总数: ${data.totalBooks}`;
        document.getElementById('totalBookTypes').textContent = `书籍种类: ${data.totalBookTypes}`;
        document.getElementById('totalPublishers').textContent = `出版社种类: ${data.totalPublishers}`;
        document.getElementById('averageRating').textContent = `书籍平均评分: ${data.averageRating}`;
        document.querySelector('.loader-container').style.display = 'none';
    })
  .catch(error => console.error('获取数据错误:', error));