import React from 'react';
import { BrowserRouter, Route, Switch } from 'react-router-dom';

//alumnos
import Alumnos from '../pages/alum';
import Acreate from '../pages/alumnos/create';
import Aedit from '../pages/alumnos/edit';
import Aupdate from '../pages/alumnos/update';
import Adelete from '../pages/alumnos/delete';
//fin alumnos

export default function Router()
{
    return(
        <BrowserRouter>
            <Switch>
                <Route exact path='/alumnos-index' component={Alumnos} /> 
                <Route exact path='/alumnos-create' component={Acreate} />
                <Route exact path='/alumnos-edit' component={Aedit} />
                <Route exact path='/alumnos-update' component={Aupdate} />
                <Route exact path='/alumnos-delete' component={Adelete} />
                {/* 
                <Route exact path='/calificaciones-create' component={} />
                <Route exact path='/calificaciones-edit' component={} />
                <Route exact path='/calificaciones-update' component={} />
                <Route exact path='/calificaciones-delete' component={} />

                <Route exact path='/materias-create' component={} />
                <Route exact path='/materias-edit' component={} />
                <Route exact path='/materias-update' component={} />
                <Route exact path='/materias-delete' component={} /> */}
            </Switch>        
        </BrowserRouter>
    )
}