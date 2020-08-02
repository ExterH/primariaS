import React from 'react';
import {Link} from 'react-router-dom';

export default class Acreate extends React.Component
{
    state = 
    {
        matricula:'',
        nombre: '',
        apellidoP: '',
        apellidoM: '',
        fecha:'',
        idg:'',        
        grados:[],
        alta: ''
    }
    componentDidMount()
    {
        fetch('http://localhost/escuelaSP/api/Grados')
        .then(response => response.json())
        .then(gradosJson => this.setState({grados: gradosJson}))
    }
    changeField = (event) => 
    {
        this.setState
        (
            {
                [event.target.name]: event.target.value
            }
        ) 
    }
    subForm = (event) =>
    {
        event.preventDefault();
        let data = 
        {
            matricula: this.state.matricula,
            nombre: this.state.nombre,
            apellidoP: this.state.apellidoP,
            apellidoM: this.state.apellidoM,
            grado:this.state.grado,
            fecha: this.state.fecha
        };
        fetch('http://localhost/escuelaSP/api/alumnos-store',
        {
            method:'POST',
            headers: 
            {
                'Accept':'applications/json',
                'Content-Type': 'applications/json',
            },
            mode: "cors",
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(alta => this.setState
        (
            {
                alta: "Alumno creado con exito"
            }
        ))
    }
    render()
    {
        const{grados, alta}=this.state
        return(
            <div className="container" style={{width: "60%"}}>
                <br/>
                <h1>Alta alumno</h1>
                {
                    alta?
                    <div className="alert alert-success" role="alert">
                        {alta}
                    </div>
                    :
                    ""
                }
                <br/>
                <form onSubmit={this.subForm}>
                    <div className="form-group" >
                        <label>Matricula: </label>
                        <input type="text" name="matricula" onChange={this.changeField} className="form-control" />
                    </div>
                    <div className="form-group" >
                        <label>Nombre(s): </label>
                        <input type="text" name="nombre" onChange={this.changeField} className="form-control" />
                    </div>
                    <div className="form-group">
                        <label>Apellido paterno: </label>
                        <input type="text" name="apellidoP" onChange={this.changeField} className="form-control" />
                    </div>
                    <div className="form-group">
                        <label>Apellido materno: </label>
                        <input type="text" name="apellidoM" onChange={this.changeField} className="form-control" />
                    </div>
                    <div className="form-group">
                        <label>Fecha de nacimiento: </label>
                        <input type="date" name="fecha" onChange={this.changeField} className="form-control" />
                    </div>
                    <div className="form-group">
                        <div className="form-group">
                            <label htmlFor="sGroup"></label>
                            <select className="form-control" name="id_grupo" id="sGroup" >
                                { grados.map(
                                    (grado, i) =>
                                    <option value={grado.idg} key={i} >
                                        {grado.idg+'°'}
                                    </option>
                                )}
                            </select>
                        </div>
                    </div>
                    <button className="btn btn-success">Registrar</button>
                </form><br/>
                <Link to="/Alumnos-index">
                    <button type="button" className="btn btn-secondary">
                        Regresar
                    </button>
                </Link><br/><br/><br/><br/>
            </div>
        )
    }
}
