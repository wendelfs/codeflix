<<<<<<< HEAD
import {Auth} from "./auth";
import {AuthOffline} from "./auth-offline";
import {Injectable} from "@angular/core";
import {AppConfig} from "./app-config";
import {AuthGuard} from "./auth-guard";

@Injectable()
export class AuthFactory {
    constructor(public auth: Auth, public authOffline: AuthOffline, public appConfig:AppConfig){

    }

   get():AuthGuard{
        return this.appConfig.getOff() ? this.authOffline : this.auth;
   }
}
=======
import {Auth} from "./auth";
import {AuthOffline} from "./auth-offline";
import {Injectable} from "@angular/core";
import {AppConfig} from "./app-config";
import {AuthGuard} from "./auth-guard";

@Injectable()
export class AuthFactory {
    constructor(public auth: Auth, public authOffline: AuthOffline, public appConfig:AppConfig){

    }

   get():AuthGuard{
        return this.appConfig.getOff() ? this.authOffline : this.auth;
   }
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
