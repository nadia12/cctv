CctvProject::Application.routes.draw do
  devise_for :users

  resources :channels
  resources :locations
  resources :favorites
  resources :users


  get   '/channel_pub/:id',       to: 'home#channel',  as: 'channel_pub'
  get   '/favorite',              to: 'home#favorite', as: 'favorite'

  post  '/up',          to: 'favorites#up',   as: 'up'
  match  '/down',       to: 'favorites#down', as: 'down', via: [:get, :post]
  root :to => 'home#dashboard'

end
