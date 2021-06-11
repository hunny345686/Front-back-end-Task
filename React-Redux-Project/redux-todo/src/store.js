import { createStore } from "redux";
import rootReducesr from "./reduces/index";

const store = createStore(rootReducesr);

export default store;
