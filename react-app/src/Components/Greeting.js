import React, { Component } from 'react';

class Greeting extends Component {
  render() {
    if(this.props.isLoggedIn) {
      return (
        <h3>Welcome Back!</h3>
      );
    } else {
      return (
        <h3>Welcome Guest!</h3>
      );
    }
  }
}

export default Greeting;
