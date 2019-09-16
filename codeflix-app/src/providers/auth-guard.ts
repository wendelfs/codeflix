<<<<<<< HEAD
import {BehaviorSubject} from "rxjs/BehaviorSubject";

export interface AuthGuard {
    userSubject(): BehaviorSubject<Object>;

    user(): Promise<Object>;

    check(): Promise<boolean>;

    login({email, password}): Promise<Object>;

    logout(): Promise<any>;
}
=======
import {BehaviorSubject} from "rxjs/BehaviorSubject";

export interface AuthGuard {
    userSubject(): BehaviorSubject<Object>;

    user(): Promise<Object>;

    check(): Promise<boolean>;

    login({email, password}): Promise<Object>;

    logout(): Promise<any>;
}
>>>>>>> 71264fc544af9982104d1172c51d8a1fa9fa3377
