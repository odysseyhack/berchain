import React, { Fragment } from 'react'

const transactions = (props) => {
  const {transactions} = props
  const row = transactions.map(trans => {
    return (
      <tr key={trans.block_address}>
        <td>{trans.block_address}</td>
        <td>13. April 2019, 20:32 UTC</td>
        <td>Masarang Foundation</td>
      </tr>
    )
  })
  return (
    <Fragment>
      <table className='table table-striped'>
        <thead>
          <tr>
            <td>Transaction Hash</td>
            <td>Date</td>
            <td>Receiver</td>
          </tr>
        </thead>
        <tbody>
          {row}
        </tbody>
      </table>
    </Fragment>
  )
}

export default transactions
