var Bookshelf = require('bookshelf'),
    bookshelfInstance;

// Initialize a new bookshelf instance, for reference elsewhere in the app.
bookshelfInstance = Bookshelf.initialize({
    client: 'mysql',
    connection: {
        host: '127.0.0.1',
        user: 'jharvard',
        password: 'crimson',
        database: 'catalog',
        charset: 'utf8'
    }
});

module.exports = bookshelfInstance;