import './bundle.scss';
import React from 'react';
import * as ReactDOM from 'react-dom';
import { createRoot } from 'react-dom/client';
// import App from './components/App';

function Welcome(props) {
  return (
    <h1>
      Hei
      {props.name}
      !
    </h1>
  );
}

const root = ReactDOM.createRoot(document.getElementById('root'));
const element = <Welcome name="Matthias" />;
root.render(element);
