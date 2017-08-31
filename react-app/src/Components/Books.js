import React, { Component } from 'react';

function BookItem(props) {

  const book = props.book;

  return (
    <li>
      <strong>{book.title}</strong> - {book.author} - {book.year}
    </li>
  );
}

class Books extends Component {
  render() {

    const books = this.props.books;

    return (
      <div>
        {books.map((book) =>
          <BookItem key={book.title + book.author} book={book} />
        )}
      </div>
    );
  }
}

export default Books;
