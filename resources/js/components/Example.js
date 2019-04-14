import React, { Component, useState } from 'react'
import ReactDOM from 'react-dom'
import contract from 'truffle-contract'
import BadgeDef from '../contracts/Badge.json'
import Web3 from 'web3'
import BarChart from './dashboard/BarChart'

const getAccount = async () => {
  const web3 = new Web3(window.ethereum)
  const accounts = await web3.eth.getAccounts()

  return accounts[0]
}

const getBadgeContract = () => {
  const Badge = contract(BadgeDef)
  Badge.setProvider(window.ethereum)

  return Badge
}

const CreateBadge = () => {
  const [status, setStatus] = useState('idle')

  const createBadge = async () => {
    setStatus('creating')
    const Badge = getBadgeContract()
    const address = await getAccount()
    const instance = await Badge.new(0, {from: address})
    console.log(instance.address)
    setStatus('complete')
  }

  return <button onClick={createBadge}>
    {status === 'idle' && 'Create Badge'}
    {status === 'creating' && 'Creating...'}
    {status === 'complete' && 'Created!'}
  </button>
}

const AddTransaction = ({badgeAddr}) => {
  const [status, setStatus] = useState('idle')

  const addTransaction = async () => {
    setStatus('creating')
    const Badge = getBadgeContract()
    const instance = await Badge.at(badgeAddr)
    const address = await getAccount()
    const transactionAddr = await instance.addTransaction('something', {from: address})
    console.log(transactionAddr.tx)
    setStatus('complete')
  }

  return <button onClick={addTransaction}>
    {status === 'idle' && 'Add Transaction'}
    {status === 'creating' && 'Creating...'}
    {status === 'complete' && 'Created!'}
  </button>
}


export default class Example extends Component {
  render () {
    return (
      <div className='container'>
        <div className='row justify-content-center'>
          <div className='col-md-8'>
            <div className='card'>
              <div className='card-header'>Example Blockchain Component</div>
              <div className='card-body'>
                <p><CreateBadge /></p>
                <p><AddTransaction badgeAddr='0x4A44e1eb04A7689F96facf61119042e06D555e69' /></p>
                <p><BarChart /></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

if (document.getElementById('root')) {
  ReactDOM.render(<Example />, document.getElementById('root'))
}
