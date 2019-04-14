import React, { PureComponent } from 'react'
import {
  BarChart, Bar, XAxis, YAxis, CartesianGrid
} from 'recharts'

export default class Example extends PureComponent {
  render () {
    return (
      <BarChart
        width={550}
        height={235}
        data={this.props.data}
        margin={{
          top: 5, right: 30, left: 20, bottom: 5,
        }}
      >
        <CartesianGrid vertical={false} strokeDasharray='3 3' />
        <XAxis dataKey='year' />
        <YAxis />
        <Bar dataKey='value' fill={this.props.barColor} />
      </BarChart>
    );
  }
}
