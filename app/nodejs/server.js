const express = require('express');
const mysql = require('mysql2/promise');
const app = express();
const port = 3000;

const pool = mysql.createPool({
    host: 'mysql',
    user: 'user',
    password: 'password',
    database: 'myapp',
    waitForConnections: true,
    connectionLimit: 10,
    queueLimit: 0
});

app.get('/', async (req, res) => {
    try {
        const [rows] = await pool.query('SELECT * FROM users');
        res.json({
            message: 'Hello from Node.js!',
            users: rows
        });
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
});

app.listen(port, () => {
    console.log(`Node.js server listening at http://localhost:${port}`);
});