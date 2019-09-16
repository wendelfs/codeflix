<<<<<<< HEAD
import {AppConfig} from "../app-config";
import {VideoResource} from "../resources/video.resource";
import {VideoController} from "./video.controller";
import {VideoAdapter} from "./video.adapter";
import {Injectable} from "@angular/core";

@Injectable()
export class VideoFactory{

    constructor(public appConfig: AppConfig,
                public videoResource: VideoResource,
                public videoController: VideoController){

    }

    get(): VideoAdapter{
        return this.appConfig.getOff() ? this.videoController : this.videoResource;
    }
=======
import {AppConfig} from "../app-config";
import {VideoResource} from "../resources/video.resource";
import {VideoController} from "./video.controller";
import {VideoAdapter} from "./video.adapter";
import {Injectable} from "@angular/core";

@Injectable()
export class VideoFactory{

    constructor(public appConfig: AppConfig,
                public videoResource: VideoResource,
                public videoController: VideoController){

    }

    get(): VideoAdapter{
        return this.appConfig.getOff() ? this.videoController : this.videoResource;
    }
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
}