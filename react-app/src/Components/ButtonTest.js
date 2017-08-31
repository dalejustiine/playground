import React, { Component } from 'react';

class ButtonTest extends Component {

  constructor(props) {
    super(props);
    this.state = {
      isToggleOn: true
    };

    this.handleClick = this.handleClick.bind(this);
  }

  handleClick(e) {
    if(this.state.isToggleOn) {
      this.setState({
        isToggleOn: false
      });
    } else {
      this.setState({
        isToggleOn: true
      });
    }
  }

  render() {
    return (
      <button onClick={this.handleClick}>
        {this.state.isToggleOn ? 'ON' : 'OFF'}
      </button>
    );
  }
}

export default ButtonTest;
