import React, { PureComponent } from 'react'
import ReactDOM from 'react-dom'
import {
  BarChart, Bar, Cell, XAxis, YAxis, CartesianGrid, Tooltip, Legend,
} from 'recharts'

const biomassData = [
  {
    year: 1,
    value: 4167
  },
  {
    year: 2,
    value: 10000
  },
  {
    year: 3,
    value: 16667
  },
  {
    year: 4,
    value: 23333
  },
  {
    year: 5,
    value: 29167
  }
]

const jobsPerHectareData = [
  {
    year: 1,
    value: 41.7
  },
  {
    year: 2,
    value: 50
  },
  {
    year: 3,
    value: 58.3
  },
  {
    year: 4,
    value: 75
  },
  {
    year: 5,
    value: 83.3
  }
]

const forestData = [
  {
    year: 1,
    value: 41667
  },
  {
    year: 2,
    value: 	500000
  },
  {
    year: 3,
    value: 583333
  },
  {
    year: 4,
    value: 666667
  },
  {
    year: 5,
    value: 708333
  }
]

const reductionData = [
  {
    year: 1,
    value: 833
  },
  {
    year: 2,
    value: 5833
  },
  {
    year: 3,
    value: 6667
  },
  {
    year: 4,
    value: 7500
  },
  {
    year: 5,
    value: 8333
  }
]

export default class Example extends PureComponent {
  render () {
    return (
      <div>
        <h3>{this.props.title}</h3>
        <BarChart
          width={500}
          height={300}
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
      </div>

    );
  }
}

if (document.getElementById('jobsPerHectareData')) {
  ReactDOM.render(<Example data={jobsPerHectareData} title='Jobs per hectare' barColor='#ecb347' />, document.getElementById('jobsPerHectareData'))
}

if (document.getElementById('biomassData')) {
  ReactDOM.render(<Example data={biomassData} title='Biomass' barColor='#ecb347' />, document.getElementById('biomassData'))
}

if (document.getElementById('forestData')) {
  ReactDOM.render(<Example data={forestData} title='Forest goods per year (profit)' barColor='#ecb347' />, document.getElementById('forestData'))
}

if (document.getElementById('reductionData')) {
  ReactDOM.render(<Example data={reductionData} title='Reduction of C02 (t) per year' barColor='#ecb347' />, document.getElementById('reductionData'))
}
