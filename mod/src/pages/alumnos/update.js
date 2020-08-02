import React from 'react';
import {Link} from 'react-router-dom';

export default class Aupdate extends React.Component
{
    state = 
    {
        alumno:[],
        grupos: [],
        editar: ''
    }
    componentDidMount()
    {
        //Grupos
        fetch('http://localhost/itic-91/public/api/get01g')
        .then(response => response.json())
        .then(gruposJson => this.setState({grupos: gruposJson}))

        //Alumnos
        fetch('http://localhost/itic-91/public/api/get04/'+this.props.location.state.id)
        .then(response => response.json())
        .then(alumnoJson => this.setState({alumno: alumnoJson}))
    }
    changeField = (event) => 
    {
        this.setState
        (
            {
                alumno:
                {
                    ...this.state.alumno,
                    [event.target.name]: event.target.value
                }
            }
        ) 
    }
    subForm = (event) =>
    {
        event.preventDefault();
        let data = 
        {
            nombre: this.state.nombre,
            app: this.state.app,
            fn: this.state.fn,
            genero:this.state.genero,
            img: this.state.img,
            id_grupo: this.state.id_grupo
        };
        fetch('http://localhost/itic-91/public/api/put01/'+this.state.alumno.id_alumno,
        {
            method:'PUT',
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
                alta: "¡¡¡Edicion exitosa!!!"
            }
        ))
    }
    render()
    {
        const{grupos, alumno, editar}=this.state
        return(
            <div className="container" style={{width: "60%"}}>
                <br/>
                <h1>Editar alumno</h1>
                {
                    editar?
                    <div className="alert alert-success" role="alert">
                        {editar}
                    </div>
                    :
                    ""
                }
                <br/>
                <form onSubmit={this.subForm}>
                    <div className="form-group" >
                        <label>Nombre(s): </label>
                        <input type="text" name="nombre" onChange={this.changeField} 
                        defaultValue={alumno.nombre} className="form-control" />
                    </div>
                    <div className="form-group">
                        <label>Apellido paterno: </label>
                        <input type="text" name="app" onChange={this.changeField}
                        defaultValue={alumno.app} className="form-control" />
                    </div>
                    <div className="form-group">
                        <label>Fecha de nacimiento: </label>
                        <input type="date" name="fn" onChange={this.changeField}
                        defaultValue={alumno.fn} className="form-control" />
                    </div>
                    <div className="form-group">
                        <label>Genero:</label><br/>
                        {alumno.genero === 0?
                            <div>
                                <div className="custom-control custom-radio custom-control-inline">
                                    <input type="radio" className="custom-control-input" id="rgenero01" 
                                    name="genero" value="0" onClick={this.changeField} defaultChecked />
                                    <label className="custom-control-label" htmlFor="rgenero01" >Femenino</label>
                                </div>
                                <div className="custom-control custom-radio custom-control-inline">
                                    <input type="radio" className="custom-control-input" id="rgenero02" 
                                    name="genero" value="1" onClick={this.changeField} />
                                    <label className="custom-control-label" htmlFor="rgenero02" >Masculino</label>
                                </div>
                                <div className="form-group">
                                    <label htmlFor="sGroup"></label>
                                    <select className="form-control" name="id_grupo" id="sGroup" >
                                        { grupos.map(
                                            (grupo, i) =>
                                            <option value={grupo.id_grupo} key={i} >
                                                {grupo.id_grupo+' '+grupo.clave + ' - ' + grupo.nombre}
                                            </option>
                                        )}
                                    </select>
                                </div>
                            </div>
                            :
                            <div>
                                <div className="custom-control custom-radio custom-control-inline">
                                    <input type="radio" className="custom-control-input" id="rgenero01" 
                                    name="genero" value="0" onClick={this.changeField} />
                                    <label className="custom-control-label" htmlFor="rgenero01" >Femenino</label>
                                </div>
                                <div className="custom-control custom-radio custom-control-inline">
                                    <input type="radio" className="custom-control-input" id="rgenero02" 
                                    name="genero" value="1" onClick={this.changeField} defaultChecked />
                                    <label className="custom-control-label" htmlFor="rgenero02" >Masculino</label>
                                </div>
                                <div className="form-group">
                                    <label htmlFor="sGroup"></label>
                                    <select className="form-control" name="id_grupo" id="sGroup" >
                                        { grupos.map(
                                            (grupo, i) =>
                                            <option value={grupo.id_grupo} key={i} >
                                                {(grupo.id_grupo === alumno.id_grupo)?
                                                 "-- --" + grupo.id_grupo+' '+grupo.clave + ' - ' + grupo.nombre + "-- --"
                                                 :
                                                 grupo.id_grupo+' '+grupo.clave + ' - ' + grupo.nombre
                                                } 
                                            </option>
                                        )}
                                    </select>
                                </div>
                            </div>
                        }
                    </div>
                    <div className="form-group">
                        <label>Foto: </label>
                        <input type="text" name="img" onChange={this.changeField}
                        defaultValue={alumno.img} className="form-control" />
                    </div>
                    <button className="btn btn-primary">Registrar</button>
                </form><br/>
                <Link to="/">
                    <button type="button" className="btn btn-outline-light">
                        Regresar
                    </button>
                </Link><br/><br/><br/><br/>
            </div>
        )
    }
}
