import { shallowMount } from '@vue/test-utils'
import App from './App';

describe('Test App', () => {
  test('Testa se é uma instancia de App', () => {
    const wrapper = shallowMount(App)
    
    expect(wrapper.find('#app').exists()).toBe(true)
  })
});