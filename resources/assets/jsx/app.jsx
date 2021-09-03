import { MySample } from "components/sample";
import React, { Component } from "react";
import ReactDom from "react-dom";
import style from "./styles.less";

export default class MyApp extends Component {
	constructor(props) {
		super(props);

		this.state = {};
	}

	render() {
		return (
			<div className={style.boxes}>
				<h2>Hello, World!</h2>
				<h3>I'm ReactJS version {React.version}</h3>
				<MySample />
			</div>
		);
	}
}

ReactDom.render(<MyApp />, document.getElementById("app"));
