import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
// import App from './App';
import FetchTest from './Components/FetchTest';
import registerServiceWorker from './registerServiceWorker';

// ReactDOM.render(<App />, document.getElementById('app'));
ReactDOM.render(<FetchTest subreddit='' />, document.getElementById('app'));
registerServiceWorker();
