import React from 'react';
import Vinhos from './Vinhos';
import Vendas from './Vendas';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";

export default class Menu extends React.Component{

  render(){
    return(
      <Router>
        <div>
          <ul>
            <li>
              <Link to="/back/">Vinhos Cadastrados</Link>
            </li>
            <li>
              <Link to="/back/vendas">Vendas</Link>
            </li>
          </ul>

          <Route exact path="/back/" component={Vinhos} />
          <Route path="/back/Vendas" component={Vendas} />
        </div>
      </Router>
    )
  }
}
