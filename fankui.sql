CREATE DATABASE library_messages;

USE library_messages;

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    reply TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO messages (name, phone, email, message) VALUES
('李阳', '13812345678', 'liyangn@qq.com', '馆长你好！我不小心把借的书弄丢了，怎么办呢？'),
('张家燚', '18180627878', 'zhangjiayi@qq.com', '可不可以增加一些科幻小说书籍呢？'),
('李阳', '13812345678', 'liyangn@qq.com'，'馆长你好，怎么借阅书籍呢?')，
('王伟', '13987654321', 'wangwei@qq.com','请问图书馆开放时间为？')，
('张敏', '13765432109', 'zhangmin@qq.com,'在图书馆学习有什么注意事项吗？')，
('李娜', '13654321098', 'lina@qq.com','请问英语专业相关书籍放在哪个位置？')，
('刘强', '13543210987', 'liuqiang@qq.com','馆长你好，怎么办理借阅卡呢？')，
('赵静', '13432109876', 'zhaojing@qq.com','馆长你好，请问图书馆借书流程是怎么样的？')，
('陈磊', '13321098765', 'chenlei@qq.com','可不可以增加一些文学类书籍?')，
('杨帆', '13210987654', 'yangfan@qq.com','请问考试期间图书馆会开放吗？')，
('黄莉', '13109876543', 'huangli@qq.com','图书馆可以增加一些充电插口吗？')，
('吴刚', '13098765432', 'wugang@qq.com','进出图书馆可以采用人脸识别系统吗？')，
('郑佳', '13987654321', 'zhengjia@qq.com','我在借期内找不到这本书怎么办？')，
('何丽', '13876543210', 'heli@qq.com','请问续借书籍该如何办理？')，
('高峰', '13765432101', 'gaofeng@qq.com','图书馆的自习环境怎么样？')，
('周蕾', '13654321012', 'zhoulei@qq.com','你有推荐的复习资料吗?')，
('孙强', '13543210923', 'sunqiang@qq.com','归还书籍的流程是怎么样的？')；
