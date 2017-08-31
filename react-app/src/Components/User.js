import React, { Component } from 'react';

class User extends Component {
  render() {
    return (
      <div>
        <h3>Name: {this.props.user.name}</h3>
        <h3>Age: {this.props.user.age}</h3>
      </div>
    );
  }
}

export default User;
