import * as ReactDOM from 'react-dom'
import * as React from 'react'
import Welcome from './components/Welcome'
import Axios from 'axios'
import * as M from 'materialize-css'

/**
 * Main script.
 *
 * @author Daniel Peters
 * @version 1.0
 */
document.addEventListener('DOMContentLoaded', () => {
  const dropDowns = document.querySelectorAll('.dropdown-trigger')
  let token = document.head.querySelector('meta[name="csrf-token"]') as HTMLMetaElement

  M.Dropdown.init(dropDowns)

  if (token) {
    Axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content
  } else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
  }

  Axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

  if (document.getElementById('example')) {
    ReactDOM.render(<Welcome/>, document.getElementById('example'))
  }
})
