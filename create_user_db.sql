
-- 创建数据库
CREATE DATABASE user_db;

-- 使用数据库
USE user_db;

-- 创建用户表
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 插入示例用户
INSERT INTO users (username, password) VALUES ('admin', 'admin');
INSERT INTO users (username, password) VALUES ('wkx', 'wkx');
INSERT INTO users (username, password) VALUES ('scj', 'scj');
INSERT INTO users (username, password) VALUES ('wjj', 'wjj');
INSERT INTO users (username, password) VALUES ('xzh', 'xzh');
INSERT INTO users (username, password) VALUES ('fhhg', '3555gh');
INSERT INTO users (username, password) VALUES ('fhfhf', 'klsdjflksj');
INSERT INTO users (username, password) VALUES ('aqHYdBhAvA', '3808986092');
INSERT INTO users (username, password) VALUES ('gbYkCnTGwh', '5140016161');
INSERT INTO users (username, password) VALUES ('oWxjHhFARH', '5741998213');
INSERT INTO users (username, password) VALUES ('AzZrvOgkQy', '3397731338');
INSERT INTO users (username, password) VALUES ('YstHTNVMQv', '3110549430');
INSERT INTO users (username, password) VALUES ('mvbieTizlD', '6717196178');
INSERT INTO users (username, password) VALUES ('mFbihjjFkm', '3922529169');
INSERT INTO users (username, password) VALUES ('coCUdijXck', '6944141228');
INSERT INTO users (username, password) VALUES ('SOAVnaaHol', '2926102627');
INSERT INTO users (username, password) VALUES ('nNEqifAlut', '2863963322');
INSERT INTO users (username, password) VALUES ('KlfsPRslbW', '4144978259');
INSERT INTO users (username, password) VALUES ('znKWZDsMge', '5749421491');
INSERT INTO users (username, password) VALUES ('cYgzVBBBNQ', '8026298837');
INSERT INTO users (username, password) VALUES ('ntaktOSnmH', '6913475229');
INSERT INTO users (username, password) VALUES ('MIgyjBOfse', '7731167111');
INSERT INTO users (username, password) VALUES ('AZVNZekxFU', '4076465458');
INSERT INTO users (username, password) VALUES ('JOOcErGUhT', '7602893904');
INSERT INTO users (username, password) VALUES ('AxiwOAgMuD', '9282196744');
INSERT INTO users (username, password) VALUES ('nECKVLNPlm', '0366482692');
INSERT INTO users (username, password) VALUES ('xZEXfNjTyK', '5001286350');
INSERT INTO users (username, password) VALUES ('FRuczPZONG', '5830689606');
INSERT INTO users (username, password) VALUES ('mQukkdsvHl', '0395169142');
INSERT INTO users (username, password) VALUES ('nVNgmHyItZ', '2781110406');
INSERT INTO users (username, password) VALUES ('ZzdZDwpRkT', '8539259989');
INSERT INTO users (username, password) VALUES ('fOJNnwonUu', '7098551141');
INSERT INTO users (username, password) VALUES ('IycpYDvvkX', '2880201043');
INSERT INTO users (username, password) VALUES ('qsOmoVnPEP', '4946688023');
INSERT INTO users (username, password) VALUES ('aGDuuAmNWh', '4674678857');
INSERT INTO users (username, password) VALUES ('eUQTWbKWrs', '0098474409');
INSERT INTO users (username, password) VALUES ('jGaJXckaso', '6788632725');
INSERT INTO users (username, password) VALUES ('NZHKYVLepw', '0934817216');
INSERT INTO users (username, password) VALUES ('LNOdakTGbI', '5901793483');
INSERT INTO users (username, password) VALUES ('wPybhsoUMO', '3512243881');
INSERT INTO users (username, password) VALUES ('iKrOfwBBVi', '5347191821');
INSERT INTO users (username, password) VALUES ('jUObtwhtOE', '2777202641');
INSERT INTO users (username, password) VALUES ('flwnvKDAmV', '6194057022');
INSERT INTO users (username, password) VALUES ('GcfgCWrxAi', '4620589012');
INSERT INTO users (username, password) VALUES ('csolQEhePm', '1474370981');
INSERT INTO users (username, password) VALUES ('EtxyXuhIMH', '1395195461');
INSERT INTO users (username, password) VALUES ('NbLIHHigKo', '2660794755');

