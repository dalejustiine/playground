import React, { Component } from 'react';
import User from './Components/User';
import Clock from './Components/Clock';
import ButtonTest from './Components/ButtonTest';
import LoginControl from './Components/LoginControl';
import Mailbox from './Components/Mailbox';
import Page from './Components/Page';
import Books from './Components/Books';
import FormControl from './Components/FormControl';
import './App.css';

class App extends Component {
  render() {

    const user = {
      name: 'Jown Wick',
      age: 30
    };

    const messages = [
      'message 1',
      'message 2',
      'message 3'
    ];

    const books = [
      {
        title: 'Science',
        author: 'science author',
        year: '2015'
      },
      {
        title: 'Math',
        author: 'english author',
        year: '2016'
      },
      {
        title: 'English',
        author: 'english author',
        year: '2017'
      },
    ];

    return (
      <div>
        <h2>Hello World</h2>
        <Clock />
        <User user={user} />
        <ButtonTest />
        <LoginControl />
        <Mailbox unreadMessages={messages} />
        <Page />
        <Books books={books} /> <br /> <br />
        <FormControl />
      </div>
    );
  }
}

export default App;
