import React from 'react';

export default class Item extends React.Component{

  constructor(props){
    super(props);

    this.onDelete = this.onDelete.bind(this);
  }

  onDelete(){
    const {onDelete, id} = this.props;
    onDelete(id);
  }

  shouldComponentUpdate(nextProps, nextState){
    return true;
  }

  render(){
    const {name, type, price, ml, onDelete} = this.props;
    return(
      <div className="vinho">
        <h2>{name}</h2>
        <div>
          <p>{type}</p>
          <p>{price}</p>
          <p>{ml}</p>
          <button>Comprar</button>
          <button onClick={this.onDelete}>Deletar</button>
          <button>Atualizar</button>
        </div>
      </div>
    );
  }

}
