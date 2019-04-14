import React, { Fragment } from 'react'
import Detail from './Detail'
import BarChart from './BarChart'

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

const details = (props) => {
  const {
    name,
    jobs_per_hectare,
    tons_of_biomass,
    reduction_of_co2
  } = props.data

  return (
    <Fragment>
      <Detail
        title={jobs_per_hectare + ' Jobs'}
        subtitle='created per hectar'
        body='Ipsum sequi deleniti impedit maiores iure Recusandae explicabo porro officiis corporis voluptatum? Dolor dolor magnam doloremque architecto consectetur Voluptates vel quidem minus molestias nemo!  Voluptatem quaerat quos rem tenetur dolores?'
        project={name}
        chart={<BarChart data={jobsPerHectareData} barColor='#9BAEB4' />}
      />
      <Detail
        title={tons_of_biomass + ' Tons'}
        subtitle='of biomass per hectar'
        body='Sit id est mollitia in iure Beatae illum cum fuga iste quo? Aliquid repellat eaque praesentium necessitatibus ad veniam. Suscipit placeat esse quam totam optio? Fugit sit rerum molestias veritatis.'
        project={name}
        chart={<BarChart data={biomassData} barColor='#9BAEB4' />}
      />
      <Detail
        title={reduction_of_co2 + ' Tons'}
        subtitle='of CO₂ saved'
        body='Amet blanditiis sapiente nesciunt repellat aperiam, ab Nulla officiis dolorem assumenda cum odit? Quisquam consequuntur hic rem ipsam dignissimos Reiciendis eaque porro aliquid doloribus deleniti fugit? Maiores molestias neque atque.'
        project={name}
        chart={<BarChart data={reductionData} barColor='#9BAEB4' />}
      />
    </Fragment>
  )
}

export default details
