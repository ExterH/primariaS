import React from 'react';
import {Link} from 'react-router-dom';

export default class Alumnos extends React.Component
{
    state=
    {
        alumnos:[]
    }

    componentDidMount()
    {
        fetch('http://localhost/escuelaSP/api/Alumnos-show')
        .then(response => response.json())
        .then(alumnosJson => this.setState({alumnos: alumnosJson}))
    }

    render()
    {
        const {alumnos} = this.state
        return(
            <div>
                <div>
                    <ul class="nav nav-">
                        <li class="nav-item">
                            <a class="nav-link active" style={{background:"light"}}>Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                            data-toggle="dropdown" 
                            href="#" role="button" 
                            aria-haspopup="true" 
                            aria-expanded="false">
                                Menú
                            </a>

                            <div class="dropdown-menu">
                            <a class="dropdown-item"  href="#">Alumnos</a>
                            <a class="dropdown-item" href="#">Crear alumnos</a>
                            {/* <a class="dropdown-item" href="#"></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a> */}
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/escuelaSP/menu">Regresar al sistema</a>
                        </li>
                    </ul>
                </div>
                <div className="container">
                    <br/>
                    <br/>
                    <center>
                        <h2>Todos los alumnos</h2>
                        <Link to={{pathname:'/alumnos-create'}}>
                            <button className="btn btn-info">
                                Agregar alumno
                            </button>
                        </Link><br/><br/>
                        <table className="table">
                            <thead>
                                <tr>
                                    <th>Matricula</th>
                                    <th>Alumno</th>
                                    <th>Grado</th>
                                    <th>Más opciones</th>
                                </tr>
                            </thead>
                            <tbody style={{color:"#00000"}}>
                                {alumnos.map((alumno, i)=>
                                    <tr>
                                        <td> 
                                            <b>{alumno.matricula}</b>    
                                        </td>
                                        <td> {alumno.apellidoP}{' '}{alumno.apellidoP}{' '}{alumno.nombre} </td>
                                        <td> {alumno.grado} </td>
                                        <td>
                                            <Link to={{pathname:'/alumnos-edit', state: {id:alumno.ida}}}>
                                                <button className="btn btn-secondary">
                                                    Editar
                                                </button>
                                            </Link>
                                            { ' ' }
                                            <Link to={{pathname:'/alumnos-update', state: {id:alumno.ida}}}>
                                                <button className="btn btn-warning">
                                                    Detalles
                                                </button>
                                            </Link>
                                            { ' ' }
                                            <Link to={{pathname:'/alumnos-delete', state: {id:alumno.ida}}}>
                                                <button className="btn btn-danger">
                                                    Eliminar
                                                </button>
                                            </Link>
                                        </td>
                                    </tr>
                                )}
                            </tbody>
                        </table>
                    </center>
                </div>
            </div>
        )
    }
}