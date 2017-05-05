Rails.application.routes.draw do
  root    'static_pages#home'

  get     '/jigl',    to: 'static_pages#jigl'
end
