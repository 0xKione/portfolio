class StaticPagesController < ApplicationController
  
  def home
  end

  def jigl
    get_page_type(params)
  end
end
