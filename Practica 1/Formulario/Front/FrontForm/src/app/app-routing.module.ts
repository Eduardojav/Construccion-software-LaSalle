import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {ReportesListComponent} from './reportes/reportes-list/reportes-list.component';
import {ReportesNewComponent} from './reportes/reportes-new/reportes-new.component';
const appRoutes: Routes = [
  {
    path: 'reporte',
    component: ReportesListComponent
  },
  {
    path: 'formulario',
    component: ReportesNewComponent
  },
  {path: '*', redirectTo: 'reporte', pathMatch: 'full'}

];
@NgModule({
  imports: [RouterModule.forRoot(appRoutes, { relativeLinkResolution: 'legacy' })],
  exports: [RouterModule]
})
export class AppRoutingModule { }
