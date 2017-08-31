import React from 'react';
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

    var querystring = require('querystring');
    const appcred = {
      email: 'admin@admin.com',
      password: 'password'
    };

    axios({
      method: 'post',
      url: 'http://localhost:1234/api/authenticate',
      headers: {
        'Accept': 'application/prs.appname.v1+json'
      },
      // transformRequest: [(data) => JSON.stringify(data.data)]
    }, querystring.stringify(appcred)).then(res => {
      console.log(res);
    }).catch(err => {
      console.log(err);
    });
  }

  render() {
    return (
      <div>
        <h1>{'/r/'}</h1>

      </div>
    );
  }
}


export default FetchTest;
