import React from 'react';
import axios from 'axios';

export default class Item extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      name: '',
      type: '',
      price: '',
      ml: ''
    }
    this.adcItem = this.adcItem.bind(this);
    this.mudaNome = this.mudaNome.bind(this);
    this.mudaTipo = this.mudaTipo.bind(this);
    this.mudaPreco = this.mudaPreco.bind(this);
    this.mudaMl = this.mudaMl.bind(this);
  }

  adcItem(event){
    event.preventDefault();
    const vinho = this.state;
    console.log(vinho);
    axios({
        method: 'post',
        url: 'http://localhost/winelandia/back/vinhos/',
        data: vinho
    }).then(res => {
        console.log(res);
        console.log(res.data);
      })
.catch(error => {
    console.log(error.response)
});
  }

  mudaNome(event){
    this.setState({ name: event.target.value });
  }

  mudaTipo(event){
    this.setState({ type: event.target.value });
  }

  mudaPreco(event){
    this.setState({ price: event.target.value });
  }

  mudaMl(event){
    this.setState({ ml: event.target.value });
  }
  render(){
    return(
      <div>
        <form onSubmit={this.adcItem}>
          <label>
            Nome:
            <input type="text" name="name" onChange={this.mudaNome}/>
          </label>
          <label>
            Tipo:
            <input type="text" name="type" onChange={this.mudaTipo}/>
          </label>
          <label>
            Preço:
            <input type="text" name="price" onChange={this.mudaPreco}/>
          </label>
          <label>
            ml:
            <input type="text" name="ml" onChange={this.mudaMl}/>
          </label>
          <button type="submit">Cadastrar</button>
        </form>
      </div>
    );
  };
}
