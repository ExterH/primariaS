import React from 'react';
import {Link} from 'react-router-dom';

export default class Aedit extends React.Component
{
    state = 
    {
        alumno:[],
        grados: [],
        editar: ''
    }
    componentDidMount()
    {
        //Grupos
        fetch('http://localhost/escuelaSP/api/Grados')
        .then(response => response.json())
        .then(gradosJson => this.setState({grados: gradosJson}))

        //Alumnos
        fetch('http://localhost/escuelaSP/api/alumnos/edit/'+this.props.location.state.id)
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
            apellidoP: this.state.apellidoP,
            apellidoM: this.state.apellidoM,
            grado:this.state.grado,
            fecha: this.state.fecha
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
        const{grados, alumno, editar}=this.state
        return(
            // <div className="container" style={{width: "60%"}}>
            //     <br/>
            //     <h1>Editar alumno</h1>
            //     {
            //         editar?
            //         <div className="alert alert-success" role="alert">
            //             {editar}
            //         </div>
            //         :
            //         ""
            //     }
            //     <br/>
            //     <form onSubmit={this.subForm}>
            //         <div className="form-group" >
            //             <label>Nombre(s): </label>
            //             <input type="text" name="nombre" onChange={this.changeField} 
            //             defaultValue={alumno.nombre} className="form-control" />
            //         </div>
            //         <div className="form-group">
            //             <label>Apellido paterno: </label>
            //             <input type="text" name="app" onChange={this.changeField}
            //             defaultValue={alumno.app} className="form-control" />
            //         </div>
            //         <div className="form-group">
            //             <label>Fecha de nacimiento: </label>
            //             <input type="date" name="fn" onChange={this.changeField}
            //             defaultValue={alumno.fn} className="form-control" />
            //         </div>
            //         <div className="form-group">
            //             <label>Genero:</label><br/>
            //             {alumno.genero === 0?
            //                 <div>
            //                     <div className="custom-control custom-radio custom-control-inline">
            //                         <input type="radio" className="custom-control-input" id="rgenero01" 
            //                         name="genero" value="0" onClick={this.changeField} defaultChecked />
            //                         <label className="custom-control-label" htmlFor="rgenero01" >Femenino</label>
            //                     </div>
            //                     <div className="custom-control custom-radio custom-control-inline">
            //                         <input type="radio" className="custom-control-input" id="rgenero02" 
            //                         name="genero" value="1" onClick={this.changeField} />
            //                         <label className="custom-control-label" htmlFor="rgenero02" >Masculino</label>
            //                     </div>
            //                     <div className="form-group">
            //                         <label htmlFor="sGroup"></label>
            //                         <select className="form-control" name="id_grupo" id="sGroup" >
            //                             { grupos.map(
            //                                 (grupo, i) =>
            //                                 <option value={grupo.id_grupo} key={i} >
            //                                     {grupo.id_grupo+' '+grupo.clave + ' - ' + grupo.nombre}
            //                                 </option>
            //                             )}
            //                         </select>
            //                     </div>
            //                 </div>
            //                 :
            //                 <div>
            //                     <div className="custom-control custom-radio custom-control-inline">
            //                         <input type="radio" className="custom-control-input" id="rgenero01" 
            //                         name="genero" value="0" onClick={this.changeField} />
            //                         <label className="custom-control-label" htmlFor="rgenero01" >Femenino</label>
            //                     </div>
            //                     <div className="custom-control custom-radio custom-control-inline">
            //                         <input type="radio" className="custom-control-input" id="rgenero02" 
            //                         name="genero" value="1" onClick={this.changeField} defaultChecked />
            //                         <label className="custom-control-label" htmlFor="rgenero02" >Masculino</label>
            //                     </div>
            //                     <div className="form-group">
            //                         <label htmlFor="sGroup"></label>
            //                         <select className="form-control" name="id_grupo" id="sGroup" >
            //                             { grupos.map(
            //                                 (grupo, i) =>
            //                                 <option value={grupo.id_grupo} key={i} >
            //                                     {(grupo.id_grupo === alumno.id_grupo)?
            //                                      "-- --" + grupo.id_grupo+' '+grupo.clave + ' - ' + grupo.nombre + "-- --"
            //                                      :
            //                                      grupo.id_grupo+' '+grupo.clave + ' - ' + grupo.nombre
            //                                     } 
            //                                 </option>
            //                             )}
            //                         </select>
            //                     </div>
            //                 </div>
            //             }
            //         </div>
            //         <div className="form-group">
            //             <label>Foto: </label>
            //             <input type="text" name="img" onChange={this.changeField}
            //             defaultValue={alumno.img} className="form-control" />
            //         </div>
            //         <button className="btn btn-primary">Registrar</button>
            //     </form><br/>
            //     <Link to="/">
            //         <button type="button" className="btn btn-outline-light">
            //             Regresar
            //         </button>
            //     </Link><br/><br/><br/><br/>
            // </div>
            <div className="container" style={{width: "60%"}}>
                <br/>
                <h1>Alta alumno</h1>
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
                        <label>Matricula: </label>
                        <input type="text" name="matricula" onChange={this.changeField} className="form-control"
                        defaultValue={alumno.matricula} />
                    </div>
                    <div className="form-group" >
                        <label>Nombre(s): </label>
                        <input type="text" name="nombre" onChange={this.changeField} className="form-control"
                        defaultValue={alumno.nombre} />
                    </div>
                    <div className="form-group">
                        <label>Apellido paterno: </label>
                        <input type="text" name="apellidoP" onChange={this.changeField} className="form-control"
                        defaultValue={alumno.apellidoP} />
                    </div>
                    <div className="form-group">
                        <label>Apellido materno: </label>
                        <input type="text" name="apellidoM" onChange={this.changeField} className="form-control"
                        defaultValue={alumno.apellidoM} />
                    </div>
                    <div className="form-group">
                        <label>Fecha de nacimiento: </label>
                        <input type="date" name="fecha" onChange={this.changeField} className="form-control"
                        defaultValue={alumno.fecha} />
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
