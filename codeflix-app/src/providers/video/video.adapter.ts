<<<<<<< HEAD
import {Observable} from "rxjs/Observable";

export interface VideoAdapter {

    latest(page: number, search: string): Observable<any>;

    get(id: number): Observable<any>;
=======
import {Observable} from "rxjs/Observable";

export interface VideoAdapter {

    latest(page: number, search: string): Observable<any>;

    get(id: number): Observable<any>;
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
}