import React, { Component } from 'react';

class Mailbox extends Component {
  render() {

    const unreadMessages = this.props.unreadMessages;

    return (
      <div>
      <h1>Hello!</h1>
      {unreadMessages.length > 0 &&
        <h3>
          You have {unreadMessages.length} unread messages.
        </h3>
      }
      </div>
    );
  }
}

export default Mailbox;
