import * as React from 'react'

/**
 * Welcome page component.
 *
 * @author Daniel Peters
 * @version 1.0
 */
export default class Welcome extends React.Component {
  render (): JSX.Element {
    return (
      <div className='card'>
        <div className='card-content'>
          <div className='card-header'>Example Component</div>
          <p>I'm an example component! Try me</p>
        </div>
      </div>
    )
  }
}
