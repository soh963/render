const express = require('express');
const app = express();
const port = process.env.PORT || 3000;

app.get('/', (req, res) => {
    res.send('안녕하세요! Node.js 앱입니다.');
});

app.listen(port, () => {
    console.log(`Node.js 앱이 포트 ${port}에서 실행 중입니다.`);
});