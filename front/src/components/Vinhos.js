import React from 'react';
import Item from './Item.js';
import axios from 'axios';

export default class Vinhos extends React.Component{

  constructor(props){
    super(props);
    this.state = {
      vinhos: []
    }

    this.onDelete = this.onDelete.bind(this);
  }

  componentDidMount() {
    axios.get(`http://localhost/winelandia/back/vinhos`)
      .then(res => {
        const vinhos = res.data;
        this.setState({ vinhos });
      });
  }

  onDelete(id){
    axios.delete(`http://localhost/winelandia/back/vinhos/${id}`)
      .then( res => {
        axios.get(`http://localhost/winelandia/back/vinhos`)
        .then(res => {
          const vinhos = res.data;
          this.setState({ vinhos: vinhos });
        })
      });
  }

  render(){
    return(
      <div className="area-vinhos">
        { this.state.vinhos.map(vinhos =>
          <Item
            key={vinhos.id}
            {...vinhos}
            onDelete={this.onDelete}
          />
        )}
      </div>
    );
  }
}
