import {initializeApp} from "https://www.gstatic.com/firebasejs/9.17.2/firebase-app.js";
import {getAuth, createUserWithEmailAndPassword,  signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.17.2/firebase-auth.js";

// Your web app's Firebase configuration
export const firebaseConfig = {
  apiKey: "AIzaSyBl8wo01fT5WJBODmW65ZuPhOug4v47GEs",
  authDomain: "finanzas-test.firebaseapp.com",
  databaseURL: "https://finanzas-test-default-rtdb.firebaseio.com",
  projectId: "finanzas-test",
  storageBucket: "finanzas-test.appspot.com",
  messagingSenderId: "583931976121",
  appId: "1:583931976121:web:02d6d596cbcf4fa0b7fe68"
};
export const app = initializeApp(firebaseConfig);
export const Auth = getAuth();
export const LogIn = signInWithEmailAndPassword;
export const CreateUser = createUserWithEmailAndPassword;