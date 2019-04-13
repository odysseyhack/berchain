import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import contract from 'truffle-contract'
import BadgeDef from '../contracts/Badge.json'
import Web3 from 'web3'

export default class CreateTransaction extends Component {
  constructor (props) {
    super(props)
    this.state = {
      amount: '',
      donatorId: '',
      donators: [],
      errors: [],
      status: 'idle'
    }
    this.handleFieldChange = this.handleFieldChange.bind(this)
    this.hasErrorFor = this.hasErrorFor.bind(this)
    this.renderErrorFor = this.renderErrorFor.bind(this)
    this.getDonators = this.getDonators.bind(this)
    this.createTransaction = this.createTransaction.bind(this)
  }

  componentDidMount() {

    let donators = JSON.parse(document.getElementById('donators').innerText);

    this.setState({donators: donators});

  }

  handleFieldChange (event) {

    console.log('handle', event.target.name);
    this.setState({
      [event.target.name]: event.target.value
    })
  }

  async getAccount () {
    const web3 = new Web3(window.ethereum)
    const accounts = await web3.eth.getAccounts()

    return accounts[0]
  }

  getBadgeContract () {
    const Badge = contract(BadgeDef)
    Badge.setProvider(window.ethereum)

    return Badge
  }

  async createTransactionAtBlockchain (data) {
    const Badge = this.getBadgeContract()
    const instance = await Badge.at('0x4A44e1eb04A7689F96facf61119042e06D555e69')
    const address = await this.getAccount()
    const transactionAddr = await instance.addTransaction(data, {from: address})

    return transactionAddr.tx
  }

  async createTransaction (event) {
    event.preventDefault()
    this.setState({status: 'working'})

    //const { history } = this.props

    const donation = {
      amount: this.state.amount,
      donatorId: this.state.donatorId
    }

    axios.post('/api/projects/1/donation', donation)
      .then( async (response) => {
        // redirect to the homepage
        //history.push('/')
        console.log(response);
        const data = `jobsPerHectare: ${response.data.kpis.jobsPerHectare}, tonsOfBiomass: ${response.data.kpis.tonsOfBiomass}, reductionOfCo2: ${response.data.kpis.reductionOfCo2}`
        const transactionAddr = await this.createTransactionAtBlockchain(data)
        console.log(transactionAddr)
        this.setState({status: 'completed'})
      })
      .catch(error => {
        this.setState({
          errors: error.response.data.errors
        })
      })
  }
  renderErrorFor (field) {
    if (this.hasErrorFor(field)) {
      return (
        <span className='invalid-feedback'>
              <strong>{this.state.errors[field][0]}</strong>
            </span>
      )
    }
  }

  hasErrorFor (field) {
    console.log(field, this.state)
    return !!this.state.errors && !!this.state.errors[field]
  }
  getDonators() {

    console.log('get donators', this.state.donators)
    return <select name='donatorId' className="form-control" onChange={this.handleFieldChange}>
      {this.state.donators.map(donator => {
        return <option value={donator.id}>{donator.name}</option>
      })}
    </select>
  }
  render () {
    const { status } = this.state

    return (
      <div className='container'>
        <div className='row justify-content-center'>
          <div className='col-md-12'>

            <h3>Create transaction</h3>

            <form onSubmit={this.createTransaction}>
              <div className='form-group'>
                <label htmlFor='money'>Donation amount in US$</label>
                <input
                  id='money'
                  type='money'
                  className={`form-control ${this.hasErrorFor('amount') ? 'is-invalid' : ''}`}
                  name='amount'
                  value={this.state.amount}
                  onChange={this.handleFieldChange}
                />
                {this.renderErrorFor('amount')}

                <br/>
                <label htmlFor='donator'>Donator</label>(<a href='/donators/create'>Add a donator</a>)
                {this.getDonators()}
                {this.renderErrorFor('donator')}
              </div>

              <button className='btn btn-primary'>
                {status === 'idle' && 'Create'}
                {status === 'working' && 'Please wait...'}
                {status === 'completed' && 'Done!'}
              </button>
            </form>
          </div>
        </div>
      </div>
    )
  }
}

if (document.getElementById('transaction')) {
  ReactDOM.render(<CreateTransaction />, document.getElementById('transaction'))
}
