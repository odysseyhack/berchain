import React, { Component, Fragment } from 'react'
import ReactDOM from 'react-dom'
import Fact from './dashboard/Fact'
import Details from './dashboard/Details'
import Transactions from './dashboard/Transactions'

export default class PublicDashboard extends Component {
  state = {
    data: '',
    showDetails: true
  }

  componentDidMount () {
    let data = document.getElementById('dashboardData')
    data = data.innerText || data.textContent
    data = JSON.parse(data)
    this.setState({ data })
  }

  switchContent () {
    let {showDetails} = this.state
    this.setState({
      showDetails: !showDetails
    })
  }

  render () {
    const {
      name,
      total_donated,
      jobs_per_hectare,
      tons_of_biomass,
      reduction_of_co2
    } = this.state.data

    let content = this.state.showDetails
      ? <Details data={this.state.data} />
      : <Transactions transactions={this.state.data.transactions} />

    return (
      <Fragment>
        <div id='badge' className='row'>
          <div className='col-sm-12 col-md-4'>
            <img src='/img/badge.svg' />
          </div>

          <div className='col-sm-12 col-md-6'>
            <h2>Deloitte</h2>
            <p>
              Deloitte provides audit, tax, consulting, enterprise risk and
              financial advisoryservices with more than 286,200 professionals
              globally. As of 2017, Deloitteis the 4th largest privately owned
              company in the United States.
            </p>
            <p>
              <a href='#'>deloitte.com/about</a>
            </p>
            <p>
              <b>Supported projects</b><br />
              <img src="/img/logo-masarang.png" width="30px" />
            </p>
          </div>
        </div>

        <div id='facts' className='row text-center'>
          <Fact title='Funds donated' body={'€' + total_donated} />
          <Fact title='Jobs created per hectar' body={jobs_per_hectare} />
          <Fact title='Tons of biomass / ha' body={tons_of_biomass + 't'} />
          <Fact title='Reduction of CO2' body={reduction_of_co2 + 't'} />
        </div>

        <div id="tab-selector">
          <button
            className={ this.state.showDetails ? 'active' : '' }
            onClick={() => this.switchContent()}
          >
            Impact
          </button>
          <button
            className={ this.state.showDetails ? '' : 'active' }
            onClick={() => this.switchContent()}
          >
            Transactions
          </button>
        </div>

        { content }
      </Fragment>
    )
  }
}

if (document.getElementById('publicDashboard')) {
  ReactDOM.render(<PublicDashboard />, document.getElementById('publicDashboard'))
}
