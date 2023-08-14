$dbname = "book collection drive";

const express = require('express');
const app = express();

// Other app configurations and middleware can be added here

// Start the server
app.listen(3000, () => {
  console.log('Server started on port 3000');
});






const mysql = require('mysql');

// Create a MySQL connection pool
const pool = mysql.createPool({
  host: 'localhost',
  user: 'root',
  password: '',
  database: $dbname,
});

// Test the database connection
pool.getConnection((err, connection) => {
  if (err) {
    console.error('Error connecting to the database:', err);
    return;
  }
  console.log('Connected to the database');
  connection.release();
});




app.get('C:\Users\deepi\OneDrive\Desktop\wd', (req, res) => {
  pool.getConnection((err, connection) => {
    if (err) {
      console.error('Error getting connection from pool:', err);
      res.status(500).json({ error: 'Internal server error' });
      return;
    }

    // Query the database
    connection.query('SELECT * FROM collection', (error, results) => {
      connection.release(); // Release the connection

      if (error) {
        console.error('Error executing query:', error);
        res.status(500).json({ error: 'Internal server error' });
        return;
      }

      // Send the results as JSON
      res.json(results);
      console.log(results);
    });
  });
});