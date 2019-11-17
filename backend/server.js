const express = require('express')
const mongoose = require('mongoose')
const path = require('path');
const config = require('config');

const app = express();

// Body Parser Middleware
app.use(express.json());

// DB Config 
const db = config.get('mongoURI');

// Connect to Mongo; connection string
mongoose.connect(db)
    .then(()=>console.log('MongoDB Connected...'))
    .catch(err => console.log(err));

// Use Routes
app.use('/api/users', require('./routes/api/users'));
app.use('/api/auth', require('./routes/api/auth'));
app.use('/api/rpc', require('./routes/api/rpc'));
const port = process.env.PORT || 5000;

app.listen(port,() => console.log(`Server started on port ${port}`));