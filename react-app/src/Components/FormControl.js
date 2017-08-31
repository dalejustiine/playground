import React, { Component } from 'react';

function OptionItem(props) {

  const cy = props.cy;

  return (
    <option value={cy.id}>{cy.value}</option>
  );
}

class FormControl extends Component {

  constructor(props) {
    super(props);
    this.state = {
      studentNumber: '',
      cy: 1
    };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(e) {
    const target = e.target;
    const value = target.value;
    const name = target.name;

    this.setState({
      [name]: value
    });
  }

  handleSubmit(e) {
    console.log('Name submitted: ' + this.state.studentNumber + '; Cy: ' + this.state.cy);
    e.preventDefault();
  }

  render() {

    const cys = [
      {
        id: 1,
        value: '2016-2017'
      },
      {
        id: 2,
        value: '2017-2018'
      }
    ];

    return (
      <div>
        <form onSubmit={this.handleSubmit}>
          <input name='studentNumber' value={this.state.studentNumber} onChange={this.handleChange} /> <br /><br />
          <select name='cy' value={this.state.cy} onChange={this.handleChange}>
            {cys.map((cy) =>
              <OptionItem key={cy.id} cy={cy} />
            )}
          </select> <br /><br />
          <input type='submit' value='Submit' />
        </form>
      </div>
    );
  }
}

export default FormControl;
