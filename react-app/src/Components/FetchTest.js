import React, { Component } from 'react';
import axios from 'axios';

class FetchTest extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      posts: []
    };
  }

  componentDidMount() {
    // axios.get('http://localhost:1234/api/')
    //   .then(res => {
    //     console.log(res);
    //     const posts = res.data.data.children.map(obj => obj.data);
    //     this.setState({ posts });
    //   });
    axios({
      method: 'post',
      url: 'http://localhost:1234/api/authenticate',
      transformResponse: [function (data) {
        console.log(data);
      }],
      headers: {
        'Accept': 'application/prs.appname.v1+json',
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      data: {
        email: 'admin@admin.com',
        password: 'password'
      }
    });
  }

  render() {
    return (
      <div>
        <h1>{`/r/${this.props.subreddit}`}</h1>

      </div>
    );
  }
}


export default FetchTest;
