import React from 'react';
import Vinhos from './Vinhos';
import Vendas from './Vendas';
import Cadvin from './Cadvin';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";

export default class Menu extends React.Component{

  render(){
    return(
      <Router>
        <div>
          <ul className="menu">
            <li className="title">
              Winelândia
            </li>
            <li className="menu-item">
              <Link to="/">Vinhos Cadastrados</Link>
            </li>
            <li className="menu-item">
              <Link to="/cadvin">Cadastrar Vinho</Link>
            </li>
            <li className="menu-item">
              <Link to="/vendas">Vendas</Link>
            </li>
          </ul>
          <Route exact path="/" component={Vinhos} />
          <Route path="/Cadvin" component={Cadvin} />
          <Route path="/Vendas" component={Vendas} />
        </div>
      </Router>
    )
  }
}
