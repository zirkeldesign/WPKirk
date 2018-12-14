import React, {Component} from "react"

import styled from "styled-components"

const View = styled.div`
  background-color: #fff;
  text-align: center;
`

export default class MySample extends Component {

  constructor(props)
  {
    super(props)

    this.state = {}
  }

  render() {

    return (
      <View>
        <h2>I'm a styled React Component</h2>
      </View>
    )
  }
}