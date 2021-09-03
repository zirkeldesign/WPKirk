import React from "react";
import styled from "styled-components";

const View = styled.div`
	background-color: #fff;
	text-align: center;
	width: 300px;
	border-radius: 16px;
	padding: 16px;
`;

export const MySample = () => {
	return (
		<View>
			<h2>I'm a styled React Component</h2>
		</View>
	);
};
