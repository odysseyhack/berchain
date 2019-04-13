import React, { Component, Fragment } from 'react'
import ReactDOM from 'react-dom'
import Fact from './dashboard/Fact'
import Detail from './dashboard/Detail'

export default class PublicDashboard extends Component {
  state = {
    data: ''
  }

  componentDidMount () {
    let data = document.getElementById('dashboardData')
    data = data.innerText || data.textContent
    data = JSON.parse(data)
    this.setState({data})
    console.log(data)
  }

  render () {
    let {
      name,
      total_donated,
      jobs_per_hectare,
      tons_of_biomass,
      reduction_of_co2
    } = this.state.data

    return (
      <Fragment>
        <div id='badge' className='row text-center'>
          <h1>Badge goes here!!1!</h1>
        </div>

        <div id="facts" className="row text-center">
          <Fact title='Funds donated' body={'€' + total_donated} />
          <Fact title='Jobs created per hectar' body={jobs_per_hectare} />
          <Fact title='Tons of biomass / ha' body={tons_of_biomass + 't'} />
          <Fact title='Reduction of CO2' body={reduction_of_co2 + 't'} />
        </div>

        <Detail
          title={jobs_per_hectare + ' Jobs'}
          subtitle='created per hectar'
          body='Ipsum sequi deleniti impedit maiores iure Recusandae explicabo porro officiis corporis voluptatum? Dolor dolor magnam doloremque architecto consectetur Voluptates vel quidem minus molestias nemo!  Voluptatem quaerat quos rem tenetur dolores?'
          project={name}
        />
        <Detail
          title={tons_of_biomass + ' Tons'}
          subtitle='of biomass per hectar'
          body='Sit id est mollitia in iure Beatae illum cum fuga iste quo? Aliquid repellat eaque praesentium necessitatibus ad veniam. Suscipit placeat esse quam totam optio? Fugit sit rerum molestias veritatis.'
          project={name}
        />
        <Detail
          title={reduction_of_co2 + ' Tons'}
          subtitle='of CO₂ saved'
          body='Amet blanditiis sapiente nesciunt repellat aperiam, ab Nulla officiis dolorem assumenda cum odit? Quisquam consequuntur hic rem ipsam dignissimos Reiciendis eaque porro aliquid doloribus deleniti fugit? Maiores molestias neque atque.'
          project={name}
        />
      </Fragment>
    )
  }
}

if (document.getElementById('publicDashboard')) {
  ReactDOM.render(<PublicDashboard />, document.getElementById('publicDashboard'))
}
