import Token from "./Token";
import AppStorage from "./AppStorage";

class User {
    login(data) {
        axios
            .post("/api/auth/login", data)
            .then(result => this.responseAfterLogin(result))
            .catch(err => console.log(err.response));
    }
    responseAfterLogin(result) {
        const access_token = result.data.access_token;
        const username = result.data.user;

        if (Token.isValid(access_token)) {
            AppStorage.store(username, access_token);
        }
    }
    hasToken() {
        const storedToken = AppStorage.getToken();
        if (storedToken) {
            return Token.isValid(storedToken) ? true : false;
        }
        return false;
    }
    loggedIn() {
        return this.hasToken();
    }
    logout() {
        AppStorage.clear();
    }
    name() {
        if (this.loggedIn()) {
            return AppStorage.getUser();
        }
    }
    id() {
        if (this.loggedIn()) {
            const payload = Token.payload(AppStorage.getToken());
            return payload.sub; 
        }
    }
}
export default User = new User();
