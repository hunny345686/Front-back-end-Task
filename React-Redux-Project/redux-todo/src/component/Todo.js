import { React, useState, useEffect } from "react";
import "./todo.css";
import { addTodo, deleteTodo, removeTodo } from "../Actions/index";
import { useDispatch, useSelector } from "react-redux";
function Todo() {
  const [inputData, setInputData] = useState("");
  // const [items, setItems] = useState(getLocalItmes());
  // const [toggleSubmit, setToggleSubmit] = useState(true);
  // const [isEditItem, setIsEditItem] = useState(null);
  const list = useSelector((state) => state.todoReducers.list);
  const dispatch = useDispatch();
  return (
    <div className="main-div">
      <div className=".child-div">
        <h2>TO-DO-LIST</h2>
        <div className="addItmes">
          <input
            type="text"
            placeholder="Add items"
            value={inputData}
            onChange={(e) => {
              setInputData(e.target.value);
            }}
          />
          <i
            className="fa fa-plus add-btn"
            onClick={() => dispatch(addTodo(inputData), setInputData(""))}
          ></i>
        </div>
        <div className="showItemss">
          {list.map((elem) => {
            return (
              <div className="eachItem" key={elem.id}>
                <h3>{elem.data}</h3>
                <div className="todo-btn"></div>
                <i
                  className="far fa-trash-alt add-btn"
                  title="Delete Item"
                  onClick={() => dispatch(deleteTodo(elem.id))}
                ></i>
              </div>
            );
          })}
        </div>

        <div className="showItem">
          <button
            className="btn effect04"
            data-sm-link-text="remove All"
            onClick={() => dispatch(removeTodo())}
          >
            <span>Clear All</span>
          </button>
        </div>
      </div>
    </div>
  );
}

export default Todo;
